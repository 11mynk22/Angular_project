<input class="search" list="name" placeholder="type here..." name="srch-term" id="srch-term" type="text" ng-model="data">

<datalist id="name">
    <option value="Angular"></option>
    <option value="ALGOL"></option>
    <option value="Active Server Pages"></option>
    <option value="Babbage"></option>
    <option value="Bash"></option>
    <option value="Bertrand"></option>
    <option value="Boo"></option>
    <option value="COBOL"></option>
    <option value="CoffeeScript"></option>
    <option value="ColdFusion"></option>
    <option value="Crystal"></option>
    <option value="Dart"></option>
    <option value="DinkC"></option>
    <option value="DYNAMO"></option>
    <option value="Euclid"></option>
    <option value="Euler"></option>
    <option value="F#"></option>
    <option value="Flavors"></option>
    <option value="Fortran"></option>
    <option value="FoxPro"></option>
    <option value="Genie"></option>
    <option value="Go"></option>
    <option value="GOAL"></option>
    <option value="Groovy"></option>
    <option value="Hack"></option>
    <option value="Haskell"></option>
    <option value="Hope"></option>
    <option value="Hypertalk"></option>
    <option value="IBM RPG"></option>
    <option value="Inform"></option>
    <option value="JADE"></option>
    <option value="Joy"></option>
    <option value="JavaScript"></option>
    <option value="Karle"></option>
    <option value="Kotlin"></option>
    <option value="KRYPTON"></option>
    <option value="LAVA"></option>
    <option value="LINC"></option>
    <option value="Lite-C"></option>
    <option value="Lucid"></option>
    <option value="MATLAB"></option>
    <option value="Maxima"></option>
    <option value="NetLogo"></option>
    <option value="Nice"></option>
    <option value="OPAL"></option>
    <option value="Oxygene"></option>
    <option value="Perl"></option>
    <option value="PostScript"></option>
    <option value="Pure"></option>
    <option value="PHP"></option>
    <option value="Python"></option>
    <option value="Qbasic"></option>
    <option value="QPL"></option>
    <option value="Red"></option>
    <option value="Ruby"></option>
    <option value="Rust"></option>
    <option value="SiMPLE"></option>
    <option value="Swift"></option>
    <option value="Tea"></option>
    <option value="TeX"></option>
    <option value="TOM"></option>
    <option value="TypeScript"></option>
    <option value="Unicon"></option>
    <option value="Unix Shell"></option>
    <option value="Visual Basic"></option>
    <option value="ZOPL"></option>
</datalist>



<div class="display">
    <div class="display-result">
        <div ng-init="database=[{Definition: 'Angular is a client side language'}]"></div>

        <p ng-repeat="data in database">
            {{ data.Definition}}
        </p>
        <textarea name="comment" id="comment" cols="40" rows="2"></textarea><br><br>
        <a class="btn btn-sm btn-success" href="" role="button">Submit</a>
    </div>
</div>
