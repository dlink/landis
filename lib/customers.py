from datetime import datetime

from vlib import db
from vlib.datatable import DataTable

class CustomersError(Exception): pass

class Customers(object):
    '''Preside over the Customers Collection'''

    def __init__(self):
        self.db = db.getInstance()
        self.dt = DataTable(self.db, 'customers')

    def add(self, record):
        record['created'] = datetime.now()
        try:
            customer_id = self.dt.insertRow(record)
            return Customer(customer_id)
        except Exception, e:
            raise CustomersError(e)


class CustomerNotFound(Exception): pass

class Customer(object):
    '''Preside over a single Customer Record'''

    def __init__(self, identifier):
        '''Identifier may be customer_id or email'''
        if isinstance(identifier, (int, long)):
            filter = 'id = %s' % identifier
        else:
            filter = 'email = "%s"' % identifier
        self.db = db.getInstance()
        sql = 'select * from customers where %s' % filter
        results = self.db.query(sql)
        if not results:
            raise CustomerNotFound('%s not found' % filter)
        self.data = results[0]
        self.__dict__.update(self.data)

    def __repr__(self):
        return str(self.data)
