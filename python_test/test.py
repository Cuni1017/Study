import requests as rq
from bs4 import BeautifulSoup
url = "https://www.1111.com.tw/search/job?ks=%E5%AF%A6%E7%BF%92"

#發送 GET 請求到 url，並將回應物件放到 resp
resp = rq.get(url)
# 將 resp.text 也就是 HTML 資料定義到 BeautifulSoup 物件內，並用 html5lib 解析 HTML 內容
soup = BeautifulSoup(resp.text, "html.parser")
card = soup.select("div.card-body a")
print(card["href"])
# 輸出網頁的 title

# for s in sel:
#     print(s.text) 

# r = rq.Session()
# payload={ #須送之參數
#     'from':'/bbs/Gossiping/index.html',
#     'yes':'yes'
# }
# rq.post("https://www.ptt.cc/ask/over18",data=payload)
# sel = soup.select("div.title a") #取HTML標中的 <div class="title"></div> 中的<a>標籤存入sel