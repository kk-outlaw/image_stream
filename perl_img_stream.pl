#! /usr/bin/perl

use strict;

sub main() {
    my $file_name = "sample.png";
    
    open(my $fh, "<", $file_name) or die();
    binmode($fh);
    
    my $buf = "";
    my $bin = "";
    while(sysread($fh, $buf, 256)) {
        $bin .= $buf;
    }
    close($fh);
    
    print "Content-Length: ", length($bin), "\n";
    print "Content-Type: image/png", "\n";
    print "Content-Disposition: filename=sample.png", "\n";
    print "\n";
    print $bin;
}

&main();
