import sys
import smtplib
import MySQLdb

myUser = 'myUserName'
myPass = 'myPassword'
myEmail = 'myEmailAddress'

db = MySQLdb.connect(host="cse.unl.edu",    # your host, usually localhost
                     user=myUser,         # your username
                     passwd=myPass,  # your password
                     db=myUser)        # name of the data base

mailserver = smtplib.SMTP('smtp.office365.com', 587)
mailserver.ehlo()
mailserver.starttls()
mailserver.login(myEmail, myPass)

# print sys.argv

email_sender = sys.argv[1]
email_subject = sys.argv[2]
email_message = sys.argv[3]

# you must create a Cursor object. It will let
#  you execute all the queries you need
cur = db.cursor()

# Use all the SQL you like
cur.execute("SELECT email FROM Users")

# print all the first cell of all the rows
for row in cur.fetchall():

    FROM = email_sender

    TO = row[0]

    recipients = TO

    SPACING = '\n\n'

    SUBJECT_TAG = 'UNL GDC'
    SUBJECT_TEXT = email_subject #'Test'
    SUBJECT = '[' + SUBJECT_TAG + '] ' + SUBJECT_TEXT

    MESSAGE_BODY = email_message

    # MESSAGE = 'Subject: {}\n\n{}'.format(SUBJECT, MESSAGE_BODY)
    
    
    MESSAGE = """From: %s\r\nTo: %s\r\nSubject: %s\r\n\

%s
""" % (FROM, TO, SUBJECT, MESSAGE_BODY)

    mailserver.sendmail(FROM, recipients, MESSAGE)

mailserver.quit()
db.close()