<div class="center flex-column">
  <h4>Send Us a Message</h4>
  <form id="message" action="php/message-us.php" method="POST">

    <label>
      Leave us a name (not required) : 
      <input id="name-field" name="name">
    </label>

    <label>
      What type of message would you like to send us?
      <select name="type-of-comment">
        <option value="default" selected>Select a type of comment</option>
        <option value="welldone">Positive Feedback</option>
        <option value="improve">Constructive Critiscm</option>
        <option value="problem">Problem with the Website</option>
      </select>
    </label>
    <div class="comment-body">
      <div class="flex-column">
        <textarea name="message"></textarea>
        <button>Send</button>
      </div>
    </div>

  </form>
</div>
