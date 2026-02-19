<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Account Sign Up</title>
    <link rel="stylesheet" href="form.css" />
  </head>
  <body>

    <!-- Section for header -->
    <header>
      <h1>Account Sign Up</h1>
    </header>
</section>
<!-- end for header -->

<section>
    <main>
      <form action="" method="post">
        <fieldset>
          <legend>Account Information</legend>
          <label for="fname">Name:</label>
          <input
            type="text"
            <?php echo 'name="fname"'; ?>
            id="fname"
            class="textbox"
            maxlength="25"
            required
          />
            <br />

            <label for="email">E-Mail:</label>
            <input
              type="email"
              <?php echo 'name="email"'; ?>
              id="email"
              class="textbox"
              maxlength="25"
              required
            />
          <br />
          <label for="phone">Phone Number:</label>
            <input
              type="tel"
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
              placeholder="012-345-6789"
              <?php echo 'name="phone"'; ?>
              id="phone"
              class="textbox"
              required
            />
        </fieldset>
</section>

<section>
        <fieldset>
          <legend>Other</legend>

          <p>How did you hear about us?</p>
          <label for="search">Search engine</label>
            <input
              type="radio"
              <?php echo 'name="heard"'; ?>
              id="search"
              value="Search Engine"
              required
            />
          <br />

          <label for="friend">Word of mouth</label>
            <input
              type="radio"
              <?php echo 'name="heard"'; ?>
              value="Friend"
              id="friend"
              required
            />
          <br />

          <label for="other">Other</label>
            <input type="radio" <?php echo 'name="heard"'; ?> value="Other" id="other" required />
          <br />

          <p><label for="comments">Comments:</label></p>
            <textarea
              <?php echo 'name="comments"'; ?>
              id="comments"
              rows="4"
              cols="50"
              required
            ></textarea>
        </fieldset>
</section>
<section>
        <input type="submit" <?php echo 'name="submit"'; ?> value="Submit" />
        <br />

        <input type="reset" <?php echo 'name="reset"'; ?> value="Reset" />
        <br />
      </form>
      </section>
    </main>
  </body>
</html>
