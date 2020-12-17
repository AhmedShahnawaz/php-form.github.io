$(function () {
    // debugger;
    // when onload window hide all massages
    $("#name-error").hide();
    $("#call-error").hide();
    $("#email-error").hide();
    $("#ref-error").hide();
    $("#degree-error").hide();
    $("#post-error").hide();
    // all error massages true 
    var n_err = true;
    var c_err = true;
    var e_err = true;
    var rf_err = true;
    var po_err = true;
    var dg_err = true;
    var st_err = true;

    // create a validate function 
    $("#name").on("keyup", function () {
      // function call area
      name_check();
    });
    function name_check() {
      var name_val = $("#name").val();
      var name_err = $("#name-error");
      var regx = /^[a-zA-Z ]{0,20}$/g;
      if (name_val == "") {
        name_err.show().html("**please fill the valid user name");
        name_err.css("color", "red");
        n_err = false;
        return false;
      } else if (!regx.test(name_val)) {
        name_err.show().html("**not allowed any symbol or numbers and check user name length");
        name_err.css("color", "red");
        n_err = false;
        return false;
      } else {
        name_err.hide();
        $("#name").css("border", "1px solid lightgreen");
        return true;
      }
    }
    // phone number validation    
    $("#call").on("keyup", function () {
      // function call area
      call_check();
    });
    function call_check() {
      var call_val = $("#call").val();
      var call_err = $("#call-error");
      var regc = /^[7-9][0-9]{9}$/g;
      if (call_val == "") {
        call_err.show().html("**please fill the valid mobile number");
        call_err.css("color", "red");
        c_err = false;
        return false;
      } else if (!regc.test(call_val)) {
        call_err.show().html("**check mobile number length");
        call_err.css("color", "red");
        c_err = false;
        return false;
      } else {
        call_err.hide();
        $("#call").css("border", "1px solid lightgreen");
        return true;
      }
    }
    // email validation    
    $("#email").on("keyup", function () {
      // function call area
      email_check();
    });
    function email_check() {
      var email_val = $("#email").val();
      var email_err = $("#email-error");
      var rege = /^([a-zA-Z0-9.-]+)@([a-z0-9]+).([a-zA-Z]{2,5})(.[a-zA-Z]{2,5})$/g;
      if (email_val == "") {
        email_err.show().html("**please fill the valid email address");
        email_err.css("color", "red");
        e_err = false;
        return false;
      } else if (rege.test(email_val)) {
        email_err.show().html("**fill valid email address");
        email_err.css("color", "red");
        e_err = false;
        return false;
      } else {
        email_err.hide();
        $("#email").css("border", "1px solid lightgreen");
        return true;
      }
    }
    // refrence validation  
    $("#ref").on("keyup", function () {
      // function call area
      ref_check();
    });
    function ref_check() {
      var ref_val = $("#ref").val();
      var ref_err = $("#ref-error");
      var regr = /^[a-zA-Z ]{0,20}$/g;
      if (ref_val == "") {
        ref_err.show().html("**please fill the valid refrenc name");
        ref_err.css("color", "red");
        rf_err = false;
        return false;
      } else if (!regr.test(ref_val)) {
        ref_err.show().html("**not allowed any symbol or numbers and check user name length");
        ref_err.css("color", "red");
        rf_err = false;
        return false;
      } else {
        ref_err.hide();
        $("#ref").css("border", "1px solid lightgreen");
        return true;
      }
    }
  
    // city validate function 
    $("#degree").on("keyup", function () {
      // function call area
      degree_check();
    });
    function degree_check() {
      var degree_val = $("#degree").val();
      var degree_err = $("#degree-error");
      var regdg = /^[a-zA-Z ]{0,20}$/g;
      if (degree_val == "") {
        degree_err.show().html("**city name required");
        degree_err.css("color", "red");
        dg_err = false;
        return false;
      } else if (!regdg.test(degree_val)) {
        degree_err.show().html("**not allowed any symbol or numbers");
        degree_err.css("color", "red");
        dg_err = false;
        return false;
      } else {
        degree_err.hide();
        $("#degree").css("border", "1px solid lightgreen");
        return true;
      }
    }
   // post select validation  
    $("#post").on("keyup", function () {
        // function call area
        post_check();
    });
    function post_check() {
        var post_val = $("#post").val();
        var post_err = $("#post-error");
        var regpo = /^[a-zA-Z ]{0,25}$/g;
        if (post_val == "") {
            post_err.show().html("**post name required");
            post_err.css("color", "red");
            po_err = false;
            return false;
          } else if (!regpo.test(post_val)) {
            post_err.show().html("**not allowed any symbol or numbers");
            post_err.css("color", "red");
            po_err = false;
            return false;
          } else {
            post_err.hide();
            $("#post").css("border", "1px solid lightgreen");
            return true;
          }
    }
    $("#sub").click(function () {
      n_err = true;
      c_err = true;
      e_err = true;
      rf_err = true;
      dg_err = true;
      po_err = true;
      // st_err = true;

      name_check();
      call_check();
      email_check();
      ref_check();
      degree_check();
      post_check();

      let nmval = $("#name").val();
      let clval = $("#call").val();
      let emval = $("#email").val();
      let rfval = $("#ref").val();
      let dgval = $("#degree").val();
      let poval = $("#post").val();
    //   let stval = $("#state").val();
    //   let rd1val = $("#rd1").val();
    //   let rd2val = $("#rd2").val();

      // if ((nmval == "")||(clval == "")||(emval == "")||(rfval == "")||(poval == "") ||(ctval == "") ||(stval == "")) {
      //       alert("please fill the input text");
      //       return false;

      //     // }else if ((n_err = true) && (e_err = true) && (c_err = true) && (p_err = true) && (cp_err = true)) {
      //     //      alert("**please check validation + " " + $this ");
      //     //      return false;
      //     }
      //     else{
      //        alert("success");
      //        return true;
      //     }

      // if ((n_err = true) && (c_err = true) && (e_err = true) && (rf_err = true) && (dg_err = true) && (po_err = true) && (st_err = true)) {
      //   return true;
      //   alert("submitted");
      // } 
      // else {
      //   return false;
      // }
      
      if (nmval == "") {
          // alert("thi si blanck");
          $("#name").css("border","1px solid red");
          $("#name").select();
          return false;
      }
      else if (clval == "") {
          // alert("thi si blanck");
          $("#call").css("border","1px solid red");
          $("#call").select();
          return false;
      }
      else if (emval == "") {
          // alert("thi si blanck");
          $("#email").css("border","1px solid red");
          $("#email").select();
          return false;
      }
       else if (rfval == "") {
          // alert("thi si blanck");
          $("#ref").css("border","1px solid red");
          $("#ref").select();
          return false;
      }
       else if (dgval == "") {
          // alert("thi si blanck");
          $("#degree").css("border","1px solid red");
          $("#degree").select();
          return false;
      }
      else if (poval == "") {
        // alert("thi si blanck");
        $("#post").css("border","1px solid red");
        $("#post").select();
        return  false;
      }
      else {
        // alert("success");
         return true;
      }
    });
  });