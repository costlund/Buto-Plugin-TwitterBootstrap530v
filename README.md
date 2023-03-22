# Buto-Plugin-TwitterBootstrap530v

Bootstrap 5

Inlude in head.

```
type: widget
data:
  plugin: twitter/bootstrap530v
  method: include
  data:
    meta: true
    css: true
    jquery: true
    popper: true
    js: true
```


## Version check

Check if Bootstrap 5 is in usage.
We keeping version check from previous version twitter/bootstrap530v.

### Javascript

Check in Javascript if Bootstrap 5 is loaded.

```
if(document.getElementById('PluginTwitterBootstrap530v')){
  console.log('Bootstrap 5 is loaded!');
}
```

### PHP

Check in PHP if Bootstrap 5 is included.

```
if(
  isset($_SESSION['plugin']['twitter']['bootstrap530v']['include']) && 
  $_SESSION['plugin']['twitter']['bootstrap530v']['include']
  )
{
  echo('Bootstrap 5 is loaded!');
}
```
```
$user = wfUser::getSession();
if($user->get('plugin/twitter/bootstrap530v/include')){
  echo('Bootstrap 5 is loaded!');
}
```

### Element check

```
type: div
settings:
  disabled: globals:_SESSION/plugin/twitter/bootstrap530v/include
innerHTML: 
```

## CSS class
Extra classes along with Bootstrap.

### Webmaster
Classes for webmaster purpose are always added in a single style element.
```
webmaster-border
webmaster-text
```

### Parentheses
Add parentheses around.
```
content-parentheses
```

### Colon
Add a colon after.
```
content-colon
```

### Changes from version 4
- Attribute "data-dismiss" changed to "data-bs-dismiss".
- Attribute "data-toggle" changed to "data-bs-toggle".
- Attribute "data-target" changed to "data-bs-target".
