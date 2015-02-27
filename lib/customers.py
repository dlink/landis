
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
            return self.dt.insertRow(record)
        except Exception, e:
            raise CustomersError(e)

class CustomerNotFound(Exception): pass

class Customer(object):
    '''Preside over a single Customer Record'''

    def __init__(self, email):
        self.db = db.getInstance()
        sql = 'select * from customers where email = "%s"' % email
        results = self.db.query(sql)
        if not results:
            raise CustomerNotFound()
        self.data = results[0]
        self.__dict__.update(self.data)

    def __repr__(self):
        return self.data
C=Customers()
r = C.add({'email': 'mud', 'type_id': 1})
