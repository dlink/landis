
from datetime import datetime

from vlib import db
from vlib.datatable import DataTable

class OrderError(Exception): pass
class OrderItemError(OrderError): pass

class Orders(object):
    '''Preside over Order in the database'''

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

    def addOrderItem(self, record):
        oi = DataTable(self.db, 'order_items')
        record['created'] = datetime.now()
        try:
            order_item_id = oi.insertRow(record)
        except Exception, e:
            raise OrderItemError('Unable to insert row: %s' % e)
        return order_item_id
