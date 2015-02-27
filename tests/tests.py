import unittest

from customers import Customer

# Fixtures
EMAIL = 'ut.nisi.a@orciUt.org'

class CustomerTest(unittest.TestCase):
    def test_getCustomer_byEmail(self):
        customer = Customer(EMAIL)
        self.assertEqual(customer.email, EMAIL)

    def test_getCustomer_byId(self):
        customer = Customer(1)
        self.assertEqual(customer.id, 1)

if __name__ == '__main__':
    unittest.main()
