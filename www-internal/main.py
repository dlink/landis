#!/usr/bin/env python

import os

from vweb.htmlpage import HtmlPage
from vweb.html import *

from header import Header
from menu import Menu

class Main(HtmlPage):

    def __init__(self):
        HtmlPage.__init__(self, 'Landis Refining Co., Inc.')
        self.header = Header(self.title)
        self.menu = Menu()

        self.style_sheets.extend([
            'css/main.css',
            ])

    def getHtmlContent(self):
        '''Return the entire HTML content of the page.
           (Without HTTP Header)
        '''
        return div(self.header.getHeader() + \
                       self.menu.getMenu() + \
                       self.body())
    def body(self):
        href='https://github.com/dlink/vreports/blob/master/README.md'
        readme_link = a('README', href=href)

        href='https://github.com/dlink/vreports'
        source_link = a(href, href=href)

        text = [h2('Landis Reporting'),
                b('Dashboard pending'),
                'Click on Menu items above',
                'Built with VReports - Source code available: %s' %source_link,
                ]
        style = 'margin: 50px 300px;'

        return div(big('\n'.join(map(p, text))),
                   style=style
                   )
                   
if __name__ == '__main__':
    Main().go()
