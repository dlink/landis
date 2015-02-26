#!/usr/local/bin/python

from vweb.html import *

LOGO = 'Reports'

class Header(object): 

    def __init__(self, title):
        self.title = title

    def getHeader(self):
        logo = LOGO
        return div(div(logo, class_='logo') + 
                   self.title, class_='header')
