# nodes-list

https://bitcoin.stackexchange.com/questions/75324/how-to-dump-peers-dat-file-to-a-plain-text-file

The result of that is an open source tool written in go that can read all peer info from peers.dat. As always, one should review the code before running this on any machine that hold a wallet. The tool should be able to work with any Bitcoin-based altcoin as well. I have tested it against Bitcoin, Litecoin, and Dogecoin peers.dats.

Installing bitpeers is quite simple, provided you have go installed, and your GOPATH set up. If not, go has a handy getting started guide which you can use to fix that.

https://golang.org/doc/install

Once go is set up, simply run

go get -u github.com/RaghavSood/bitpeers/cmd/bitpeers
If your go environment is set up properly, you should now have a bitpeers command available. If not, try finding your GOBIN (GOPATH/bin) and adding it to your PATH.

bitpeers to easily dump peers.dat addresses as either human-readable plaintext or JSON. It accepts three flags:

Usage of bitpeers:
      --addressonly       outputs only addresses if specified
      --filepath string   the path to peers.dat
      --format string     the output format {json|text} (default "json")
      
Running bitpeers --filepath /mnt/doge/.dogecoin/peers.dat --addressonly will produce a JSON array of all the IPs and ports in peers.dat. You can also pass the --format text option to produce a list of all IPs and ports, one IP:port per line.

Running without the --addressonly option will produce the full JSON/text output, which contains the following:

$ bitpeers --filepath ./peers.dat --format text
SerializationVersion: 34fc0100
Time: 1526192792
ServiceFlags: 0x000000000000000d
IP: 42.5.143.180:8333
Source: 8.8.8.8
LastSuccess: 1526746622
Attempts: 0
