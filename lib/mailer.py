import smtplib
import email.utils
from email.mime.text import MIMEText

def send_mail(to_name, to_addr, from_name, from_addr, bcc, subject, html_body):
    
    # Create the message
    msg = MIMEText(html_body, 'html')
    msg['To'] = email.utils.formataddr((to_name, to_addr))
    msg['From'] = email.utils.formataddr((from_name, from_addr))
    msg['Subject'] = subject
    
    server = smtplib.SMTP('localhost')
    #server.set_debuglevel(True)
    try:
        server.sendmail(from_addr, [to_addr, bcc], msg.as_string())
    finally:
        server.quit()

def test():
    html = '<h1>Green black</h1><p>this is a para</p>'
    send_mail('David Link', '<dvlink@gmail.com>',
              'Crowfly', 'info@crowfly.net', 'dvlink@yahoo.com',
              'Test brown', html)
