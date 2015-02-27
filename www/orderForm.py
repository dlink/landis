#!/usr/bin/env python

from vweb.htmlpage import HtmlPage

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
        self.debug_cgi = 1

    def process(self):
        pass

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
