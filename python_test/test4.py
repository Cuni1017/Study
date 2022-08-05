import requests as rq
from bs4 import BeautifulSoup
url = "https://www.1111.com.tw/search/job?ks=%E5%AF%A6%E7%BF%92"
    r = rq.get(url) #將網頁資料GET下來  

    soup = BeautifulSoup(r.text,"html.parser") #將網頁資料以html.parser
    sel = soup.select("div.title a")
    page = soup.select("div.btn-group.btn-group-paging a")
    print ("本頁的URL為"+url)
    url = "https://www.ptt.cc"+ page[3]["href"] #組合出上一頁的網址
    print(url)
    for s in sel: #印出網址跟標題
        print(s["href"],s.text)
