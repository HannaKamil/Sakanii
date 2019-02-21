
<form action="/update/{{$contact_id->contact_id}}" method="post" role="form" class="contactForm">
    {{csrf_field()}}

    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" name="form_name" class="form-control" value="{{$contact_id->name}}"  id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
        </div>
        <div class="form-group col-md-6">
            <input type="email" class="form-control" value="{{$contact_id->email}}" name="form_email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" value="{{$contact_id->flat_address}}" name="form_flat_address" id="subject" placeholder="Your flat address" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
        <div class="validation"></div>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="form_message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message">{{$contact_id->message}}</textarea>
        <div class="validation"></div>
    </div>
    <div class="text-center"><button type="submit">update</button></div>
</form>
