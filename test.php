<html>
<body>


<input type="text" id="1" />
<input type="text" id="2" />
<input type="text" id="3" />
<input type="text" id="4" />
<input type="text" id="5" />
<script language=javascript>
    var numOfCalls = 1;
    var int=self.setInterval("display()",2000);
    function display()
    {
        var t=numOfCalls;
        document.getElementById(numOfCalls).value=t;
        numOfCalls++;
        if(numOfCalls > 5)
            window.clearInterval(int);
    }
</script>
</form>


</body>
</html>