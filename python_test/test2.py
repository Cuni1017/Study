import requests as rq
from bs4 import BeautifulSoup
url = "https://www.ptt.cc/bbs/Gossiping/M.1659424026.A.D3C.html"
r1 =  rq.get(url)

print(r1.text)

# r = rq.Session()
# payload ={
#     "from":"/bbs/Gossiping/index.html",
#      "yes":"yes"
# }
# r1 = r.post("https://www.ptt.cc/ask/over18?from=%2Fbbs%2FGossiping%2Findex.html",payload)

# r1.encoding='big5'
# html = r1.text
# print(html)
# pay = {
#     "ks":"實習"
# }
# url = "https://www.1111.com.tw/search/job?ks=%E5%AF%A6%E7%BF%92"
# r1  = r.post(url,pay)
# r1.encoding = 'utf-8'
# print(r1 .text)
