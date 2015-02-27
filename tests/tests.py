import unittest

from customers import Customer

# Fixtures
EMAIL = 'ut.nisi.a@orciUt.org'

class CustomerTest(unittest.TestCase):
    def test_getCustomer(self):
        customer = Customer(EMAIL)
        self.assertEqual(customer.email, EMAIL)

if __name__ == '__main__':
    unittest.main()
