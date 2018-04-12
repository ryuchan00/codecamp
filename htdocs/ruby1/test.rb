
def printStr(name)
    msg = "Hello," + name + "\n"
    puts(msg)
end

if ARGV.size != 1
    print "ex) $ ruby func.rb hoge\n"
    exit
else
    name = ARGV[0]
end

printStr(name)