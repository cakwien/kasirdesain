<script>
	function sum() {
      var txtFirstNumberValue = document.getElementById('satu').value;
      var txtSecondNumberValue = document.getElementById('dua').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('hasil').value = result;
      }
}
</script>

<input type="text" id="satu" name="satu" onkeyup="sum();">
<input type="text" id="dua" name="dua" onkeyup="sum();">
<input type="text" name="hasil" id="hasil">