#!/usr/bin/env python

from datetime import datetime

from vweb.htmlpage import HtmlPage

from customers import Customers, Customer, CustomerNotFound
from orders import Orders

from containers_form1 import ContainersForm1
from containers_form2 import ContainersForm2
from containers_form3 import ContainersForm3

class OrderForm(HtmlPage):

    def __init__(self):
        HtmlPage.__init__(self, 'Order Form')
        self.title = 'ORDER A CONTAINER - Landis Refining Co., Inc.'
        self.javascript_src = [
            '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
            'js/containers.js']
        self.style_sheets = [
            #'http://fonts.googleapis.com/css?family=Source+Sans+Pro' \
            #    ':200,300,400,600,700,900',
            'css/default.css',
            'css/fonts.css',
            #'http://fonts.googleapis.com/css?family=Droid+Sans|Lobster',
            ]
        # To Do: do we need this for IE 6?
        #<!--[if IE 6]>
        #<link href="default_ie6.css" rel="stylesheet" type="text/css" />
        #<![endif]-->

        self.customers = Customers()
        self.orders = Orders()
        self.debug_cgi = 1
        self.user_msg = 'there is no user message yet'

    def process(self):
        HtmlPage.process(self)
        field_names = ['customer_type', 'single_jars']

        try:
            if 'customer_type' in self.form: # data submitted
                self.addOrderRecord()
        except Exception, e:
            # Need to sanitize this for production
            self.user_msg = 'Sorry there was a problem: %s: %s' \
                % (e.__class__.__name__, e)

    def fromForm(self, field):
        if field in self.form:
            return self.form[field].value
        else:
            return None

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

        # Set user message
        self.user_msg = 'Thank you for your order number: %s' % order_id

    def getHtmlContent(self):
        return \
            self.getLogo() + \
            self.getHeader() + \
            self.getUserMsg() + \
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
        return \
            self.getBody_top_part() + \
            ContainersForm1().get() + \
            ContainersForm2().get() + \
            ContainersForm3().get() + \
            self.getBody_bottom_part()

    def getBody_top_part(self):
        return '''
<div id="page" class="container">
   <div id="content">
      <div class="title">
         <h2>ORDER FORM</h2>
         <span class="byline">
            Customer Service Available <br />
            Monday - Friday 9:00 a.m. - 5:00 pm EST
         </span>
      </div>
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
