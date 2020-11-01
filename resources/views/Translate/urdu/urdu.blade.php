<!DOCTYPE html>
<html>
    <head>
    </head>
    </body>
    
    <div class="links">
                    <a href="http://127.0.0.1:8000/home/en">Home</a>
                    <a href="http://127.0.0.1:8000/contact/en">Contact</a>
                   
                </div>



    <div class="container">
        <h4 class="display-4 text-center" style="font-size: 1.5rem">{{ __("Test")}}</h4>
        <br><br>
</div>

<h> Contact </h><br><br>

    <h>{{__('msg.Wellcome')}}</h><br>
    <h>{{ trans('msg.News')}}</h><br>
    <h>@lang('Blog')</h><br>

<select>
    <option><a href="http://127.0.0.1:8000/en">English</a></option>
    <option><a href="http://127.0.0.1:8000/ud">urdu</a></option>
    
</select>

<!-- <div class="links">
                    <a href="http://127.0.0.1:8000/contact/en">English</a>
                    <a href="http://127.0.0.1:8000/contact/ud">urdu</a>
                   
                </div> -->

</body>
</html>