import time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys

driver = webdriver.Chrome()
driver.get("https://app.sli.do/event/5oeuvgbk/live/polls")
assert "Python" in driver.title

a = 0
while a < 5 :
    a += 1
    bttn = driver.find_element_by_class_name('poll__btn-edit btn')
    bttn.click()
    texta = driver.find_element_by_name("text")
    texta.send_keys("#votekaren")
    texta.send_keys(Keys.RETURN)
    bttnsend = driver.find_element_by_class_name('poll__btn-submit btn-primary')
    bttnsend.click()
driver.close()
print("test")
time.sleep(2000)
