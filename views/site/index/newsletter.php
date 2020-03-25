<?
use app\components\mgcms\MgHelpers;


?>

<section class="Section text-center animatedParent">
      <div class="container fadeIn animated">
        <h2>Newsletter</h2>
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <p>
              Zapisze się do naszego newslettera, żeby otrzymać informacje o
              naszych aktualnych działaniach i nowych projektach.
            </p>
          </div>
        </div>
        <div class="Newsletter animatedParent">
          <form class="fadeIn animated" method="POST">
            <div class="Newsletter__inner">
              <div class="Form__group form-group">
                <input
                  class="Form__input form-control"
                  placeholder="&nbsp;"
                  id="phone"
                  name="phone"
                  type="phone"
                  required
                />
                <label class="Form__label" for="phone"
                  >Wpisz swój adres e-mail</label
                >
              </div>
              <input class="btn btn-success" type="submit" value="ZAPISZ SIĘ" />
            </div>
            <div class="Form__group form-group text-left">
              <input class="Form__checkbox" type="checkbox" id="agree-1" />
              <label for="agree-1">
                Wyrażam zgodę na przetwarzanie moich danych osobowych zgodnie z
                ustawą o ochronie danych osobowych w celu otrzymania od Real
                Estate informacji oraz fert drogą mailową. Zapisanie się do
                newslettera jest dobrowolne.
              </label>
            </div>
            <div class="Form__group form-group text-left">
              <input class="Form__checkbox" type="checkbox" id="agree-2" />
              <label for="agree-2">
                Zostałem poinformowany, że przysługuje mi prawo dostępu do
                swoich danych, możliwość ich poprawiania, żądania aprzestania
                ich przetważania.<br />
                Administratorem danych jest Real Estate.
              </label>
            </div>
          </form>
        </div>
      </div>
    </section>
