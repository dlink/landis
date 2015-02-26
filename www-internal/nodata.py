#!/usr/bin/env python

from vweb.htmlpage import HtmlPage

class NoData(HtmlPage):
    def __init__(self):
        HtmlPage.__init__(self, 'Landis Refining Co., Inc.')
        print 'Location: main.py'

NoData().go()
