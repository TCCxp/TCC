from pyccuracy.actions import ActionBase

class LoggedInAction(ActionBase):
regex = r'^(E )?Estou conectado com username [\"](?P<user>.+)[\"] e senha [\"](?P<senha>.+)[\"]$'
def execute(self, context, user, senha):
self.execute_action(u"Eu vou para \"http://localhost/TCC/\"", context)

        # Se o usuário não está logado, nós realizamos o processo de login
        logged_in = False
        try:
            self.execute_action(u"E eu vejo o link \"Cadastre-se aqui!\"", context)
        except ActionFailedError:
            logged_in = True

        if not logged_in:
	self.execute_action(u"E eu clico no link \"Cadastre-se aqui!\"", context)
	self.execute_action(u"E eu espero por 5 segundos", context)
	self.execute_action(u"E eu preencho a caixa de texto \"nome\" com \"%s\"" % Junior, context)
	self.execute_action(u"E eu marco a radio \"rb_masc\" com valor\"%s\"" % masculino, context)		
	self.execute_action(u"E eu preencho a caixa de texto \"login\" com \"%s\"" % teste, context)
	self.execute_action(u"E eu preencho a caixa de texto \"email\" com \"%s\"" % teste@uol.com, context)
	self.execute_action(u"E eu preencho a caixa de texto \"senha\" com \"%s\"" % 1234, context)
	self.execute_action(u"E eu preencho a caixa de texto \"cidade\" com \"%s\"" % Tibagi, context)
	self.execute_action(u"E eu seleciono o item  com texto \"%s\" na select \"dia\"" % 1, context)
	self.execute_action(u"E eu seleciono o item  com texto \"%s\" na select \"mes\"" % Janeiro, context)
	self.execute_action(u"E eu seleciono o item  com texto \"%s\" na select \"ano\"" % 1988, context)
	self.execute_action(u"E eu clico no botão \"cadastro\"", context)
