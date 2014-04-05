from pyccuracy.page import Page

class LoginPage(Page):

url = 'http://localhost/TCC/principal/'
    
    def register(self):
        self.register_element("LOGIN", "//input[@id='login']")
        self.register_element("SENHA", "//input[@id='senha']")
	self.register_element("LOGAR", "//input[@id='Btn_Login']")
        #self.quick_register("My Div", "div.myclass")

