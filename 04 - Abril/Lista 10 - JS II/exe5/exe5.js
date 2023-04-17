const media = () => {
  const num1 = parseInt(document.getElementById('num1').value);
  const num2 = parseInt(document.getElementById('num2').value);
  const num3 = parseInt(document.getElementById('num3').value);
  const media = (num1+num2+num3)/3;

  alert(`A média é ${media.toFixed(2)}`);

  return false;
}