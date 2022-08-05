# open(文件,路徑).
    #w 可寫
    #r 可讀


fr = open('爬蟲測試/test.txt','r')
# read校率低一節一節讀
# readline是一行一行讀,但只能讀一行
# readlines可以按照行讀,並以列表版回
content = fr.read()

print(content)