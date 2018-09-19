# SBB Arrival to Siri Shortcuts handler

Unfortunaly the official [app](https://www.sbb.ch/en/timetable/mobile-apps/sbb-mobile.html) doesn't support iOS 12 Siri Shortcuts yet. But the timetable data is part of opentransportdata.swiss. I use the API provided by transport.opendata.ch. Because Siri Shorcuts only support top-level dictionary elements, I've built this handler, which returns the arrival date of a train, which can be used by a shortcut.

# Shortcut 
The shortcut needs to be like this:

![shortcut demo](https://api.jhuesser.ch/sbb/cut.jpg)

This returns the time in a variable you can process futher (eg. send a message)

# Example / Usage

You need to make a GET-call with `destination` and `departure` set. this can be the station name or ID (refer to the [API docs](http://transport.opendata.ch/docs.html)). You can try it with `https://api.jhuesser.ch/sbb/handler.php`

for example:
```HTTP
GET https://api.jhuesser.ch/sbb/handler.php?departure=8573710&destination=8503504
```