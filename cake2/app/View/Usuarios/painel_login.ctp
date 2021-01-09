
<?php
// echo $this->Flash->render('auth');
echo $this->Form->create('Usuario');

echo $this->Session->flash();
echo $this->Session->flash('auth');
echo $this->Form->input('login');
echo $this->Form->input('senha');

echo $this->Form->end('Entrar');

//  var_dump($this->request->data);



