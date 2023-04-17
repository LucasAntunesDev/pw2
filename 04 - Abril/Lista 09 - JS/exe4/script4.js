const validar = () =>{
  const rs = document.getElementById('rs').value;
  const sc = document.getElementById('sc').value;
  const pr = document.getElementById('pr').value;
  const estado = document.getElementById('estados').value;

  switch (estado){
      case rs:
          alert('Bem vindos ao RS');
          break;
      case sc:
          alert('Bem vindos a SC');
          break;
      case pr:
          alert('Bem vindos ao PR');
  }

  return false
}