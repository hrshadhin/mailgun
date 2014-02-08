import requests
def send_simple_message():
    return requests.post(
        "https://api.mailgun.net/v2/sandboxxxx.mailgun.org/messages",
        auth=("api", "app_key_here"),
        data={"from": "Mailgun Sandbox <postmaster@sandboxxxx.mailgun.org>",
              "to": "Maha <hrs@gmail.com>",
              "subject": "Hello Mahajur",
              "text": "Hi i'm Shadhin,its a Test Mail."})

print send_simple_message()
