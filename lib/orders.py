
from datetime import datetime

from vlib import db
from vlib.datatable import DataTable

class OrderError(Exception): pass

class Orders(object):

    def __init__(self):
        self.db = db.getInstance()
        self.dt = DataTable(self.db, 'orders')

    def add(self, record):
        record['created'] = datetime.now()
        try:
            order_id = self.dt.insertRow(record)
        except Exception, e:
            raise OrderError('Unable to insert row: %s' % e)

        return order_id

