##
# This file includes Rspec tests for WordPress
##

# Use preconfigured poltergeist/phantomjs rules and load WP class
require_relative 'lib/config.rb'

# Good list about Capybara commands can be found in: https://gist.github.com/zhengjia/428105
# This can help you getting tests up and running more faster.

### Begin tests ###

describe "WordPress: #{WP.siteurl} - ", :type => :request, :js => true do

  subject { page }

  describe "admin-panel" do

    before do
      visit WP.siteurl('/wp-login.php')
    end

    it "There's a login form" do
      expect(page).to have_id "wp-submit"
    end

    # Only run these if we could create a test user
    if WP.user?
      it "Logged in to WordPress Dashboard" do
        within("#loginform") do
          fill_in 'log', :with => WP.user.username
          fill_in 'pwd', :with => WP.user.password
        end
        click_button 'wp-submit'
        # Should obtain cookies and be able to visit /wp-admin
        expect(page).to have_id "wpadminbar"
      end
    end

  end

end
