<!-- form -->
{% if msg %}
    <div id="message-container" class="message-container success-message">{{ msg }}</div>
    <script>
        setTimeout(function() {
          document.getElementById('message-container').classList.add('hidden');
        }, 500);
    </script>
{% endif %}
<!-- /* numbers section */ -->
<style>


.numbers-section{
  margin-top: 5%;
  background-color: rgba(250, 198, 198, 0.105);
}

.card {
  background-color: transparent;
  color: white;
  text-align: center; 
  border: none; 
  border-radius: 10px; 
  padding: 20px; 
  margin: 10px; 
}

.card-number {
  font-size: 2rem; 
  font-weight: bold; 
  margin-bottom: 10px; 
}


</style>

<div class="container-fluid numbers-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                  <div class="card-number">1234</div>
                  <div class="card-subject">Subject A</div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-number">5678</div>
                  <div class="card-subject">Subject B</div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-number">9012</div>
                  <div class="card-subject">Subject C</div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <div class="card-number">3456</div>
                  <div class="card-subject">Subject D</div>
                </div>
              </div>
        </div>
    </div>
</div>
