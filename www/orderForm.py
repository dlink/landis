#!/usr/bin/env python

from datetime import datetime

from vweb.htmlpage import HtmlPage

from customers import Customers, Customer, CustomerNotFound
from orders import Orders
from mailer import send_mail

from form1 import Form1
from form2 import Form2
from form3 import Form3

EMAIL_SUBJECT = 'Landis Refining Co., Inc. - Order Confirmation'
EMAIL_FROM_NAME = 'Info - Landis Refining Co'
#EMAIL_FROM_ADDR = 'info@landisrefining.com>'
EMAIL_FROM_ADDR = 'info@crowfly.net'
EMAIL_BCC_ADDR = 'dvlink@gmail.com,andy@agodfrey.com'

class OrderForm(HtmlPage):

    def __init__(self):
        HtmlPage.__init__(self, 'Order Form')
        self.title = 'ORDER A CONTAINER - Landis Refining Co., Inc.'
        self.javascript_src = [
            '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
            'js/jq/jquery.mask.min.js',
            'js/containers.js']
        self.style_sheets = [
            #'http://fonts.googleapis.com/css?family=Source+Sans+Pro' \
            #    ':200,300,400,600,700,900',
            'css/default.css',
            'css/form.css',
            'css/fonts.css',
            #'http://fonts.googleapis.com/css?family=Droid+Sans|Lobster',
            ]
        # To Do: do we need this for IE 6?
        #<!--[if IE 6]>
        #<link href="default_ie6.css" rel="stylesheet" type="text/css" />
        #<![endif]-->

        self.customers = Customers()
        self.orders = Orders()
        self.user_msg = ''
        self.order_submitted = 0

    def process(self):
        HtmlPage.process(self)
        field_names = ['customer_type', 'single_jars']

        try:
            if 'customer_type' in self.form:
                order_id = self.addOrderRecord()
                self.sendConfirmationEmail()
                self.user_msg = \
                    'Thank you for your order number: %s.<br/>' \
                    'An email confirmation has been sent to %s' \
                    % (order_id, self.fromForm('email'))
                self.order_submitted = 1
        except Exception, e:
            # Need to sanitize this for production
            self.user_msg = 'Sorry there was a problem: %s: %s' \
                % (e.__class__.__name__, e)

    def fromForm(self, field):
        '''Return value from the form field or None'''
        if field in self.form:
            return self.form[field].value
        else:
            return None

    def fromForm2(self, field):
        '''Return value from the form field or "" '''
        if field in self.form:
            return self.form[field].value
        else:
            return ''

    def addOrderRecord(self):

        # Get data from the form:
        customer_type = self.fromForm('customer_type')
        email = self.fromForm('email')
        phone = self.fromForm('phone')
        name  = self.fromForm('your_name')
        parts = name.split(' ')
        if len(parts) == 1:
            first_name = None
            last_name = name
        else:
            first_name = ' '.join(parts[0:-1])
            last_name = parts[-1]
        company  = self.fromForm('business_name')
        single   = self.fromForm('single_jar')
        multiple = self.fromForm('multiple_jars')
        mailer   = self.fromForm('patient_scrap_mailer')

        # get customer based on email if exists
        try:
            customer = Customer(email)
        except CustomerNotFound, e:
            customer = None

        # Add new customer
        if not customer:
            customer = {
                        'type_id'   : customer_type,
                        'email'     : email,
                        'first_name': first_name,
                        'last_name' : last_name,
                        'company'   : company,
                        'phone'     : phone,
                        }
            customer = self.customers.add(customer)
            
        # Add order:
        record = {
            'order_date': datetime.now(),
            'customer_id': customer.id
            }
        order_id = self.orders.add(record)

        # Add order items:
        if single:
            self.orders.addOrderItem(
                {'order_id': order_id,'product_id': 1, 'quantity': single})
        if multiple:
            self.orders.addOrderItem(
                {'order_id': order_id,'product_id': 2, 'quantity': multiple})
        if mailer:
            self.orders.addOrderItem(
                {'order_id': order_id, 'product_id': 3,'quantity'  : mailer})

        return order_id

    def sendConfirmationEmail(self):
        name  = self.fromForm('your_name')
        email = self.fromForm('email')
        from_name = EMAIL_FROM_NAME
        from_email = EMAIL_FROM_ADDR

        send_mail(to_name=name,
                  to_addr=email,
                  from_name=EMAIL_FROM_NAME,
                  from_addr=EMAIL_FROM_ADDR,
                  bcc=EMAIL_BCC_ADDR,
                  subject=EMAIL_SUBJECT,
                  html_body=self.getConfirmationEmailBody())

    def getConfirmationEmailBody(self):
        customer_types = {'1': 'Dentist',
                          '2': 'Dentist Staff',
                          '3': 'Patient',
                          '4': 'Jeweler'}
        customer_type = customer_types[self.fromForm('customer_type')]

        data = dict(your_name=self.fromForm2('your_name'),
                    customer_type=customer_type,
                    dentist_name=self.fromForm2('dentist_name'),
                    dentist_phone=self.fromForm2('dentist_phone'),
                    business_name=self.fromForm2('business_name'),
                    address=self.fromForm2('address'),
                    city=self.fromForm2('city'),
                    state=self.fromForm2('state'),
                    zip=self.fromForm2('zip'),
                    phone=self.fromForm2('phone'),
                    single_jar=self.fromForm2('single_jar'),
                    multiple_jars=self.fromForm2('multiple_jars'),
                    patient_scrap_mailer=self.fromForm2('patient_scrap_mailer')
                    ,
                    email=self.fromForm2('email'),
                    contact_name=self.fromForm2('contact_name'))

        html_body = '''
<img src='http://www.agodfrey.com/demo/lrc/images/landisBanner.jpg'>
<p>Thank you {your_name}. Your order has been submitted.<br><br>
Please review the information below.
If you have any questions please call us at 800-433-6192.<br><br>
<table border='1' >
   <tr><td><b>Name</b></td><td>{your_name}</td></tr>
   <tr><td><b>Customer Type: </b></td><td>{customer_type}</td></tr>
   <tr><td><b>Referring Dentist:</b></td><td>{dentist_name}</td></tr>
   <tr><td><b>Referring Phone:</b></td><td>{dentist_phone}</td></tr>
   <tr><td><b>&nbsp;</b></td><td>&nbsp;</td></tr>
   <tr><td><b>Business</b></td><td>{business_name}</td></tr>
   <tr><td><b>Address</b></td><td>{address}</td></tr>
   <tr><td><b>City</b></td><td>{city}</td></tr>
   <tr><td><b>State</b></td><td>{state}</td></tr>
   <tr><td><b>Zip Code</b></td><td>{zip}</td></tr>
   <tr><td><b>Phone:</b></td><td>{phone}</td></tr>
   <tr><td><b>&nbsp;</b></td><td>&nbsp;</td></tr>
   <tr><td><b>Single Jars</b></td><td>{single_jar}</td></tr>
   <tr><td><b>Multiple Jars</b></td><td>{multiple_jars}</td></tr>
   <tr><td><b>Patient Scrap Mailers</b></td><td>{patient_scrap_mailer}</td></tr>
   <tr><td><b>&nbsp;</b></td><td>&nbsp;</td></tr>
   <tr><td><b>Email</b></td><td>{email}</td></tr>
   <tr><td><b>Contact</b></td><td>{contact_name}</td></tr>
</table>'''.format(**data)
        return html_body

    def getHtmlContent(self):
        return \
            self.getLogo() + \
            self.getHeader() + \
            self.getBody() + \
            self.getFooter()

    def getLogo(self):
        return '''
<div id="logo">
   <div align="center">
      <a href="#" >
         <img src="images/landisBanner.jpg" alt="" width="1200" height="175" border="0" />
      </a>
   </div>
</div>'''

    def getHeader(self):
        return '''
<div id="header">
   <div id="menu" class="container">
      <ul>
         <li><a href="index.html" accesskey="1" title="">HOME</a></li>
         <li><a href="orderinfo.html" accesskey="1" title="">ORDER</a></li>
         <li><a href="shipinfo.html" accesskey="2" title="">SHIP</a></li>
         <li><a href="paymentinfo.html" accesskey="3" title="">PAYMENT</a></li>
         <li><a href="faq.html" accesskey="4" title="">FAQ</a></li>
         <li><a href="prices.html" accesskey="5" title="">LIVE MARKET UPDATES</a></li>
         <li><a href="news.html" accesskey="6" title="">INDUSTRY NEWS</a></li>
         <li class="current_page_item">
            <a href="about.html" accesskey="7" title="">ABOUT</a></li>
         <li><a href="contact.html" accesskey="8" title="">CONTACT</a></li>
      </ul>
   </div>
</div>'''

    def getUserMsg(self):
        if self.user_msg:
            return '''
<div id='userMsg'>
   <div class='container'>
      <center><p>%s</p></center>
   </div>
</div>
''' % self.user_msg
        return ''

    def getBody(self):
        o = ''
        o += self.getBody_top_part()
        o += self.getUserMsg()

        if not self.order_submitted:
            o += Form1().get()
            o += Form2().get()
            o += Form3().get()

        o += self.getBody_bottom_part()
        return o

    def getBody_top_part(self):
        return '''
<div id="page" class="container">
   <div class="title">
      <h2>ORDER FORM</h2>
      <span class="byline">
         Customer Service Available <br />
         Monday - Friday 9:00 a.m. - 5:00 pm EST
      </span>
   </div>
   &nbsp;<br/>
   <div id="form">
'''

    def getBody_bottom_part(self):
        return '''
  </div>

   <div id="sidebar">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
   </div>
</div>
'''
    def getFooter(self):
        return '''
<div id="copyright" class="container">
   <p>Copyright (c) 2014 landis refining co.,INC. - All rights reserved. | 800-433-6192</p>
</div>'''

if __name__ == '__main__':
    OrderForm().go()
