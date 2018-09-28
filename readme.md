# Toggle Field
A drop in replacement for the default Boolean field

![Toggle In Action](https://res.cloudinary.com/davidpiesse/image/upload/v1535317267/2018-08-26_21.59.30_s2bu39.gif)

## Installation
Same as most other Nova Packages
```
composer require davidpiesse/nova-toggle
```

## Usage
The Toggle has all the same options as the Boolean field so you can set the values to be stored in the Model.
```php
Toggle::make('Active')
    ->trueValue('On')
    ->falseValue('Off')
```

In addition you can set visual parameters

### Labels
You can show both, or each state label
```php
Toggle::make('Active')
    ->showLabels() //Both labels
    ->showOnlyTrueLabel() //True label only
    ->showOnlyFalseLabel() //False label only
```

To set the text you can use either or both of the following. You must also set the visibility of the labels as described above.
```php
Toggle::make('Active')
    ->showLabels()
    ->trueLabel('Tru Dat')
    ->falseLabel('Nah Dawg')
```
The defaults are 'True' and 'False'


### Size
You can set the width and height. Setting the width will auto scale the height, but you can override this with ->height().
Defaults are 60 (px) and 26 (px) 
```php
Toggle::make('Active')
    ->width(80)
    ->height(45) //To override scaling
```


### Colors
You can set wither or both of the background colours for the Toggle. By default True is the Nova 'Success Green' [ var(--success) ] and false is a Grey 60 [ var(--60) ]
```php
Toggle::make('Active')
    ->trueColor('pink')
    ->falseColor('#fcfcfc')
```

### Speed
You can set the animation speed in ms with
```php
Toggle::make('Active')
    ->speed(500)
```
The default is 300ms
