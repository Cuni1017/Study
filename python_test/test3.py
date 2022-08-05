from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from bs4 import BeautifulSoup
import time
# 開啟瀏覽器視窗(Chrome)
# 方法一：執行前需開啟chromedriver.exe且與執行檔在同一個工作目錄
# driver = webdriver.Chrome()
# 方法二：或是直接指定exe檔案路徑
path =  "C:/staff_mysql/origin/python_test/chromedriver.exe"
driver = webdriver.Chrome(path)
d = driver.get("https://www.1111.com.tw/search/job?ks=%E5%AF%A6%E7%BF%92") 

search_box = driver.find_element("name", "q")
search_box.send_keys('ChromeDriver')
search_box.submit()

time.sleep(3)
soup = BeautifulSoup(d.text,"html.parser") #將網頁資料以html.parser
page = soup.select("div.job_item_data_mobile_show ")
print(page.text)
# element = driver.find_element_by_class_name("gLFyf.gsf")
# element.send_keys("Selenium Pytho")
# button = driver.find_element_by_class_name("gLFyf.gsf")
# button.click()
