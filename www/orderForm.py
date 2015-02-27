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
            self.user_msg += 'Sorry there was a problem: %s: %s' \
                % (e.__class__.__name__, e)

    def addOrderRecord(self):
        company = None
        if 'business_name' in self.form:
            company = self.form['business_name'].value

        customer_type = self.form['customer_type'].value
        email         = self.form['email'].value

        self.user_msg += 'customer_type: "%s"' % customer_type
        # get customer based on email if exists
        try:
            customer = Customer(email)
        except CustomerNotFound, e:
            customer = None

        # Add new customer
        if not customer:
            customer = {'company': company,
                        'type_id': customer_type,
                        'email'  : email,
                        }
            customer = self.customers.add(customer)
            
        # Add order:
        record = {
            'order_date': datetime.now(),
            'customer_id': customer.id
            }
        order_id = self.orders.add(record)

        self.user_msg += 'Thank you for your order number: %s' % order_id

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
