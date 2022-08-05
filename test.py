import requests as rq
from bs4 import BeautifulSoup
url = "https://www.ptt.cc/bbs/MobileComm/index.html"

for i in range(3):
    r = rq.get(url) #將網頁資料GET下來  

    soup = BeautifulSoup(r.text,"html.parser") #將網頁資料以html.parser
    sel = soup.select("div.title a")
    page = soup.select("div.btn-group.btn-group-paging a")
    print ("本頁的URL為"+url)
    url = "https://www.ptt.cc"+ page[3]["href"] #組合出上一頁的網址
    print(url)
    for s in sel: #印出網址跟標題
        print(s["href"],s.text)
# for s in sel:
#     print(s.text) 

# r = rq.Session()
# payload={ #須送之參數
#     'from':'/bbs/Gossiping/index.html',
#     'yes':'yes'
# }
# rq.post("https://www.ptt.cc/ask/over18",data=payload)
# sel = soup.select("div.title a") #取HTML標中的 <div class="title"></div> 中的<a>標籤存入sel