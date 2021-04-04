<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inicio|Club CMS</title>
  <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous">
  <style>
    ::-webkit-scrollbar {
      width: 10px;
    }
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }
    ::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
  </style>

  <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.9.0/showdown.min.js"></script>
  <script type="text/javascript">
    $(document).ready(() => {
      const params = new URLSearchParams(window.location.search);
      const mdUrl = params.get('url');
      if (mdUrl !== null) {
        $.get({
          url: mdUrl,
          success: (md) => {
            const html = (new showdown.Converter()).makeHtml(md)
            $('#content').html(html)
          },
          error: (_, errorMsg) => {
            $('#content').html(`<h1>Something went wrong!</h1><br/><h2>${errorMsg}</h2>`)
          }
        })
      } else {
        $('#content').html('<h1>Please supply a valid URL</h1>')
      }
    })
  </script>
</head>
<body style="background-color: #80b0ff">
  <div class="container" style="margin: 20px auto">
    <div class="jumbotron" style="background-color: white; border-radius: 20px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.5);">
      <div id="content" class="container">
        <noscript>
          <h1>You need javascript enabled :))</h1>
        </noscript>
      </div>
    </div>
  </div>
</body>
</html>
