<form id="myForm">
    <div class="button dropdown">
      <select name="languageSelected" required="required" id="languageselector">
        <option value="">Select the language</option>
        @foreach($reviewForm_language as $lang)
         <option value="{{$lang->id}}">{{$lang->name}}</option>
        @endforeach
      </select>
      
    </div>
    <input id="ajaxSubmit" type="submit" value="Select"/>
  </form>
 