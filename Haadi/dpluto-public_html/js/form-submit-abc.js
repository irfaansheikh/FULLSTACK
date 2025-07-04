  
    $(document).ready(function(){
        jQuery.validator.addMethod("lettersonly",function(e,t){return this.optional(t)||/^[a-zA-Z\s]+$/i.test(e)},"Invalid Value")
    });

    $(document).ready(function(){

        $(".form_submission").each(
            function(){
                $(this).validate({
                    rules:{
                        name:{required:!0,lettersonly:!0},
                        email:{email:!0,required:!0},
                        phone:{required:!0},
                        message:{required:!0}
                    },submitHandler:function(e){
                        var t={},
                        n=$(e).find("[data-name]");
                        if(0!=n.length){
                            for(var i=0;i<n.length;i++){
                                t[$(n[i]).attr("data-name")]=$(n[i]).val();
                            }
                        }
                        console.log(e);
                        $(e).find(".loader").show();
                        var a=$(e).find('[name="name"]').val(),
                        o=$(e).find('[name="email"]').val(),
                        l=$(e).find('[name="phone"]').val(),
                        //r=$(e).find('[name="message"]').val(),
                        s=$(e).find('[name="url"]').val(),
                        c=$(e).find('[name="domain"]').val(),
                        u=$(e).find('[name="subject"]').val(),
                        p=$(e).find('[name="price"]').val(),
                        pc=$(e).find('[name="pkgctgry"]').val(),
                        pt=$(e).find('[name="pkgtitle"]').val(),
                        ip=$(e).find('[name="sysip"]').val();
                        adl=$(e).find('[name="addressl"]').val(),
                        tt=$(e).find('[name="title"]').val();
                        tk='9'+Math.floor((Math.random() * 9999999999) + 1000000000);


                        $.ajax({
                            type:"POST",
                            url:"include/send_data.php?action=form_submission",
                            dataType:"json",
                            data:{
                                name:a,
                                email:o,
                                phone:l,
                                //message:r,
                                url:s,
                                domain:c,
                                subject:u,
                                price:p,
                                title:tt,
                                optional:t,
                                sysip:ip,
                                addressl:adl,
                                pkgctgry:pc,
                                pkgtitle:pt,
                                randomnum:tk,
                            },
                            success:function(t){
                                console.log(t);
                                t.response?($(e).trigger("reset"),
                                $(e).find([type="submit"]).hide(),
                                $(e).find(".success").html("<p>Thank you for filling out your information!</p>"),
                                $(e).find(".success").show()):$(e).find(".error").html("Error Occurred"),
                                $(e).find(".loader").hide();
                                
                               console.log('success');
                                if(pt) {
                                    console.log("order");
                                    window.location = "order/order-now.php?tkn="+tk;
                                } else {
                                    console.log("select Package");
                                    window.location = "order/select-package.php?tkn="+tk;
                                }
                            
                            },error:function(t,n,i){
                                console.log(t);
                                $(e).find(".error").html("Error Occurred "+i),
                                $(e).find(".loader").hide();

                                console.log('Test Error');
                                
                                if(pt) {
                                    window.location = "order/order-now.php?tkn="+tk;
                                } else {
                                    window.location = "order/select-package.php?tkn="+tk;
                                }
                                
                            }
                        })
                    }
                })
        });
	})