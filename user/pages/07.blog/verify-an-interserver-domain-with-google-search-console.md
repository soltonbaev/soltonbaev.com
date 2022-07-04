# How to verify your InterServer domain with Google Search Console using TXT record

Google Search Console is a great tool to track any web-site issues and organic traffic. When adding new property to Google Search Console (by method that includes any protocol and all of the subdomains) you are greeted with this message:

 ![[verify-domain-ownership.png]] 

To verify the the domain you need to place the snippet of text information into the DNS records of the specified domain. The domains are provided by domain registrars such as Godaddy, Namecheap etc.

In this example I will use Interserver's Domain manager.

- Simply login to your InterServer Account. Choose the existing domain
- go to the C-panel
- find the DNS Zone Editor
- click Add DNS Record
- paste the text into the ' Record' field
- type in the name of your domain into the 'Name Field'

![[dns-zone-editor.png]]

Go back to your Google Search Console and click 'Verify'.
Note: the domain name verification using this method can take some time to update. But this method makes sure you have Google Search Console statistics for your web-site regardless of protocols or subdomains used