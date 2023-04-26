<?php $ptitle= 'Cabot Cruises - Book';include '_top.php'; ?>
    <h1 class="title"> Book Your Next Trip Now! </h1>
    <div>
        <form action="/action_page.php">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" required>
            <label for="fname">Address Line</label>
            <input type="text" id="add" name="add" required>
            <label for="fname">City</label>
            <input type="text" id="city" name="city" required>
            
            <label for="state">Select the State</label>
            <select id="state" name="state" required>
                <option value="hurr">Please Select...</option>
                <option value="alabama">Alabama</option>
                <option value="alaska">Alaska</option>
                <option value="arizona">Arizona</option>
                <option value="arkansas">Arkansas</option>
                <option value="california">California</option>
                <option value="colorado">Colorado</option>
                <option value="connecticut">Connecticut</option>
                <option value="delaware">Delaware</option>
                <option value="florida">Florida</option>
                <option value="georgia">Georgia</option>
                <option value="hawaii">Hawaii</option>
                <option value="idaho">Idaho</option>
                <option value="illinois">Illinois</option>
                <option value="indiana">Indiana</option>
                <option value="iowa">Iowa</option>
                <option value="kansas">Kansas</option>
                <option value="kentucky">Kentucky</option>
                <option value="louisiana">Louisiana</option>
                <option value="maine">Maine</option>
                <option value="maryland">Maryland</option>
                <option value="massachusetts">Massachusetts</option>
                <option value="michigan">Michigan</option>
                <option value="minnesota">Minnesota</option>
                <option value="mississippi">Mississippi</option>
                <option value="missouri">Missouri</option>
                <option value="montana">Montana</option>
                <option value="nebraska">Nebraska</option>
                <option value="nevada">Nevada</option>
                <option value="new_hampshire">New Hampshire</option>
                <option value="new_jersey">New Jersey</option>
                <option value="new_mexico">New Mexico</option>
                <option value="new_york">New York</option>
                <option value="north_carolina">North Carolina</option>
                <option value="north_dakota">North Dakota</option>
                <option value="ohio">Ohio</option>
                <option value="oklahoma">Oklahoma</option>
                <option value="oregon">Oregon</option>
                <option value="pennsylvania">Pennsylvania</option>
                <option value="rhode_island">Rhode Island</option>
                <option value="south_carolina">South Carolina</option>
                <option value="south_dakota">South Dakota</option>
                <option value="tennessee">Tennessee</option>
                <option value="texas">Texas</option>
                <option value="utah">Utah</option>
                <option value="vermont">Vermont</option>
                <option value="virginia">Virginia</option>
                <option value="washington">Washington</option>
                <option value="west_virginia">West Virginia</option>
                <option value="wisconsin">Wisconsin</option>
                <option value="wyoming">Wyoming</option>
            </select>

            <label for="zipcode">Zipcode</label>
            <input type="number" id="zipcode" name="zipcode" required>

            <label for="lname">Phone Number</label>
            <input type="number" id="phonenum" name="phonenum" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="cruise">Cruise Selection</label>
            <select id="cruise" name="cruise" required>
                <option value="hurr"><i> Please Select... </i></option>
                <option value="caribbeanCruise">Caribbean Cruise</option>
                <option value="MediterraneanCruise">Mediterranean Cruise</option>
                <option value="alaskanCruise">Alaskan Cruise</option>          
                <option value="norwegianCruise">Norwegian Cruise</option>
                <option value="galapagosCruise">Galapagos Islands Cruise</option>
            </select>
               
            <input type="submit" value="Book My Cruise" class="bookSub">
        </form>
    </div> 
<?php include '_bot.php'; ?>