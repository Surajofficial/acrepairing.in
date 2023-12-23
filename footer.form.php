<div class="col-sm-12 ">
    <p id="msg_6"></p>
    <form class="form-inline" id="myform_6">
        <input type="hidden" name="captcha" id="captcha_6" value="123456" />

        <div class="form-group col-sm-1"></div>
        <div class="form-group col-sm-3">
            <label for="exampleName">Name</label>
            <input type="text" class="form-control" name="name" id="name_6" placeholder="Name" style="width:100%;">
            
        </div>
        <div class="form-group col-sm-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" name="email" id="email_6"
                style="width:100%;">
            <p class="alert alert-danger" id="email_error_6" style="display:none;"></p>
        </div>
        <div class="form-group col-sm-3">
            <label for="phone">Phone:</label>
            <input type="number" oninput="javascript: if (this.value.length > 10){ this.value = this.value.slice(0, 10);}if((this.value.length < 10)){document.getElementById('mksubmit_6').disabled = true;}else{document.getElementById('mksubmit_6').disabled = false;}" maxlength="10"  title="Please Enter Vailed Mobile Number"
                class="form-control" pattern="[6-9]{1}[0-9]{9}" name="phone" id="phone_6" placeholder="Enter Phone" style="width:100%;">
            <p class="alert alert-danger" id="phone_error_6" style="display:none;"></p>
        </div>
        <div class="form-group col-sm-1">
            <br>
            <input type="submit"  value="Submit" id="mksubmit_6" class="btn btn-success form-control"
                style="margin-top:2px; padding:5px 30px;">
        </div>
        <div class="col-sm-12 text-center" style="padding-top:2em;">

        </div>
    </form>

</div>
<div class="col-sm-12 d-flex justify-content-center text-center" style="margin-bottom: 10px; height: 60px;">
    <p class="text-danger " id="error_6" style="font-size: 15px; line-height: 2.5; display: none;background-color: white; padding: 5px; justify-content: center;"></p>
    <p class="text-success" id="success_6" style="font-size: 15px; display: none;">Massage Sent Our Team Will Contact You soon</p>
</div>