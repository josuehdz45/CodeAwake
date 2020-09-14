### Errors controller sample
<code>
    Error("message":string, $code:int);
</code>
<code>
    $x = 0;
	try{
		if($x == 0){
			throw new Error("No se puede quedar en en ceros", 6);
		}
	}catch(Error $e){
		print("This is your error: ".$e->error_get());
	}
</code>