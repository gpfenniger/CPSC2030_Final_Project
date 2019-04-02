<div class="center flex-column">
  <h4>Leave a Comment</h4>
  <form>

    <label>
      Leave us a name (not required) : 
      <input id="name-field">
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
        <textarea></textarea>
        <button>Submit</button>
      </div>
    </div>

  </form>
</div>

<script>
  $("select").on("change", function() {
    if ($("select").val() === "default")
      $(".comment-body").slideUp();
    else
      $(".comment-body").slideDown();
  });
</script>

<style>
  .center {
    width: 80%;
    margin: auto;
    margin-bottom: 15px;
  }

  .center form {
    display: flex;
    flex-direction: column;
    align-items: left;
  }

  .center h4 {
    padding: 10px;
    border-bottom: solid black 1px;
  }

  .comment-body {
    display: none;
    padding: 20px;
    width: 40%;
  }

  .flex-column {
    display: flex;
    flex-direction: column;
  }

  textarea {
    border: solid black 1px;
    padding: 15px;
    width: 100%;
  }

  .comment-body button {
    width: 100px;
  }
</style>
