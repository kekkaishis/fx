#开发规范

	本篇规范制定了代码基本元素的相关标准;
	以确保共享的PHP代码间具有较高程度的技术互通性;
	以下涉及到命名规范的一定注意命名必须要有意义。
	
##基本代码规范(参考PSR-1)	
	
###1.概览

* PHP代码文件必须以 <?php 标签开始;
* PHP代码文件必须以 不带BOM的 UTF-8 编码;
* 命名空间以及类必须符合 PSR 的自动加载规范：PSR-0 或 PSR-4 中的一个;
* 类的命名必须遵循 StudlyCaps 大写开头的驼峰命名规范;
* 类中的常量所有字母都必须大写，单词间用下划线分隔;
* 方法名称必须符合 camelCase 式的小写开头驼峰命名规范;
* 数据表和字段采用小写加下划线方式命名。

###2.文件

####2.1. PHP标签

* PHP代码必须使用 <?php ?> 长标签 ;

* 一定不可使用其它自定义标签。

####2.2. 字符编码

* PHP代码必须且只可使用不带BOM的UTF-8编码。

###3. 命名空间和类

* 根据规范，每个类都独立为一个文件，且命名空间至少有一个层次：顶级的组织名称（vendor name;

* 类的命名必须 遵循 StudlyCaps 大写开头的驼峰命名规范;

* PHP 5.3及以后版本的代码必须使用正式的命名空间。

例如：
```php
<?php
// PHP 5.3及以后版本的写法
namespace Vendor\Model;

class Foo
{
}
```

###3. 类的常量、属性和方法

####3.1. 常量

* 类的常量中所有字母都必须大写，词间以下划线分隔。
* 参照以下代码：
```php
<?php
namespace Vendor\Model;

class Foo
{
    const VERSION = '1.0';
    const DATE_APPROVED = '2012-06-01';
}
```

####3.2. 属性

* 类的属性命名小写开头的驼峰式 $camelCase。

####3.3. 方法

* 方法名称必须符合 camelCase() 式的小写开头驼峰命名规范。

###4.变量、函数、语言变量、配置变量

####4.1. 变量
* 变量的命名小写开头的驼峰式 $camelCase。

####4.2. 函数

* 函数的命名使用小写字母和下划线的方式，例如 get_client_ip。

####4.3. 语言变量

* 语言变量以大写字母和下划线命名，例如MY_LANG，以下划线打头的语言变量通常用于系统语言变量，例如 _CLASS_NOT_EXIST_。

####4.4. 配置变量

* 配置参数以大写字母和下划线命名，例如HTML_CACHE_ON。

###5.数据库

####5.1. 数据表

* 小写加下划线方式命名，并注意不要以下划线开头，例如 admin_root;

####5.2. 字段

* 小写加下划线方式命名，并注意不要以下划线开头，例如root_img;

####5.3. 数据编码

* 数据库编码必须使用UTF-8编码。

##代码风格规范(参考PSR-2)

###1. 概览

* 代码必须遵循 PSR-1 中的编码规范 。
* 代码必须使用4个空格符而不是 tab键 进行缩进。
* 每行的字符数应该软性保持在80个之内， 理论上一定不可多于120个， 但一定不能有硬性限制。
* 每个 namespace 命名空间声明语句和 use 声明语句块后面，必须插入一个空白行。
* 类的开始花括号({)必须写在函数声明后自成一行，结束花括号(})也必须写在函数主体后自成一行。
* 方法的开始花括号({)必须写在函数声明后自成一行，结束花括号(})也必须写在函数主体后自成一行。
* 类的属性和方法必须添加访问修饰符（private、protected 以及 public）， abstract 以及 final 必须声明在访问修饰符之前，而 static 必须声明在访问修饰符之后。
* 控制结构的关键字后必须要有一个空格符，而调用方法或函数时则一定不能有。
* 控制结构的开始花括号({)必须写在声明的同一行，而结束花括号(})必须写在主体后自成一行。
* 控制结构的开始左括号后和结束右括号前，都一定不能有空格符。

####1.1. 例子

* 以下例子程序简单地展示了以上大部分规范：
```php
<?php
namespace Vendor\Package;

use FooInterface;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class Foo extends Bar implements FooInterface
{
    public function sampleFunction($a, $b = null)
    {
        if ($a === $b) {
            bar();
        } elseif ($a > $b) {
            $foo->bar($arg1);
        } else {
            BazClass::bar($arg2, $arg3);
        }
    }

    final public static function bar()
    {
        // method body
    }
}
```

###2. 通则

####2.1 基本编码准则

* 代码必须符合 PSR-1 中的所有规范。

####2.2 文件

* 所有PHP文件必须使用Unix LF (linefeed)作为行的结束符。

* 所有PHP文件必须以一个空白行作为结束。

* 纯PHP代码文件必须省略最后的 ?> 结束标签。

####2.3. 行

* 行的长度一定不能有硬性的约束。

* 软性的长度约束一定要限制在120个字符以内，若超过此长度，带代码规范检查的编辑器一定要发出警告，不过一定不可发出错误提示。

* 每行不应该多于80个字符，大于80字符的行应该折成多行。

* 非空行后一定不能有多余的空格符。

* 空行可以使得阅读代码更加方便以及有助于代码的分块。

* 每行一定不能存在多于一条语句。

####2.4. 缩进

* 代码必须使用4个空格符的缩进，一定不能用 tab键 。

* 备注: 使用空格而不是tab键缩进的好处在于，

* 避免在比较代码差异、打补丁、重阅代码以及注释时产生混淆。

* 并且，使用空格缩进，让对齐变得更方便。

####2.5. 关键字 以及 True/False/Null

* PHP所有 关键字必须全部小写。

* 常量 true 、false 和 null 也必须全部小写。

###3. namespace 以及 use 声明

* namespace 声明后 必须 插入一个空白行。

* 所有 use 必须 在 namespace 后声明。

* 每条 use 声明语句 必须 只有一个 use 关键词。

* use 声明语句块后 必须 要有一个空白行。

* 例如：
```php
<?php
namespace Vendor\Package;

use FooClass;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

// ... additional PHP code ...
```

###4. 类、属性和方法

* 此处的“类”泛指所有的class类、接口以及traits可复用代码块。

####4.1. 扩展与继承

* 关键词 extends 和 implements必须写在类名称的同一行。

* 类的开始花括号必须独占一行，结束花括号也必须在类主体后独占一行。

```php
<?php
namespace Vendor\Package;

use FooClass;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class ClassName extends ParentClass implements \ArrayAccess, \Countable
{
    // constants, properties, methods
}
```

* implements 的继承列表也可以分成多行，这样的话，每个继承接口名称都必须分开独立成行，包括第一个。

```php
<?php
namespace Vendor\Package;

use FooClass;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class ClassName extends ParentClass implements
    \ArrayAccess,
    \Countable,
    \Serializable
{
    // constants, properties, methods
}
```

####4.2. 属性

* 每个属性都必须添加访问修饰符。

* 一定不可使用关键字 var 声明一个属性。

* 每条语句一定不可定义超过一个属性。

* 不要使用下划线作为前缀，来区分属性是 protected 或 private。

* 以下是属性声明的一个范例：

```php
<?php
namespace Vendor\Package;

class ClassName
{
    public $foo = null;
}
```

####4.3. 方法

* 所有方法都必须添加访问修饰符。

* 不要使用下划线作为前缀，来区分方法是 protected 或 private。

* 方法名称后一定不能有空格符，其开始花括号必须独占一行，结束花括号也必须在方法主体后单独成一行。参数左括号后和右括号前一定不能有空格。

* 一个标准的方法声明可参照以下范例，留意其括号、逗号、空格以及花括号的位置。

```php
<?php
namespace Vendor\Package;

class ClassName
{
    public function fooBarBaz($arg1, &$arg2, $arg3 = [])
    {
        // method body
    }
}
```

####4.4. 方法的参数

* 参数列表中，每个参数后面必须要有一个空格，而前面一定不能有空格。

* 有默认值的参数，必须放到参数列表的末尾。

```php
<?php
namespace Vendor\Package;

class ClassName
{
    public function foo($arg1, &$arg2, $arg3 = [])
    {
        // method body
    }
}
```

* 参数列表可以分列成多行，这样，包括第一个参数在内的每个参数都必须单独成行。

* 拆分成多行的参数列表后，结束括号以及方法开始花括号 必须 写在同一行，中间用一个空格分隔。

```php
<?php
namespace Vendor\Package;

class ClassName
{
    public function aVeryLongMethodName(
        ClassTypeHint $arg1,
        &$arg2,
        array $arg3 = []
    ) {
        // method body
    }
}
```

####4.5. abstract 、 final 、 以及 static

* 需要添加 abstract 或 final 声明时， 必须写在访问修饰符前，而 static 则必须写在其后。

```php
<?php
namespace Vendor\Package;

abstract class ClassName
{
    protected static $foo;

    abstract protected function zim();

    final public static function bar()
    {
        // method body
    }
}
```

####4.6. 方法及函数调用

* 方法及函数调用时，方法名或函数名与参数左括号之间一定不能有空格，参数右括号前也 一定不能有空格。每个参数前一定不能有空格，但其后必须有一个空格。

```php
<?php
bar();
$foo->bar($arg1);
Foo::bar($arg2, $arg3);
```

* 参数可以分列成多行，此时包括第一个参数在内的每个参数都必须单独成行。

```php
<?php
$foo->bar(
    $longArgument,
    $longerArgument,
    $muchLongerArgument
);
```

###5. 控制结构

* 控制结构的基本规范如下：

	* 控制结构关键词后必须有一个空格。
	* 左括号 ( 后一定不能有空格。
	* 右括号 ) 前也一定不能有空格。
	* 右括号 ) 与开始花括号 { 间一定有一个空格。
	* 结构体主体一定要有一次缩进。
	* 结束花括号 } 一定在结构体主体后单独成行。
	
* 每个结构体的主体都必须被包含在成对的花括号之中，

* 这能让结构体更加结构话，以及减少加入新行时，出错的可能性。

####5.1. if 、 elseif 和 else

* 标准的 if 结构如下代码所示，留意 括号、空格以及花括号的位置，

* 注意 else 和 elseif 都与前面的结束花括号在同一行。

```php
<?php
if ($expr1) {
    // if body
} elseif ($expr2) {
    // elseif body
} else {
    // else body;
}
```

* 应该使用关键词 elseif 代替所有 else if ，以使得所有的控制关键字都像是单独的一个词。

####5.2. switch 和 case

* 标准的 switch 结构如下代码所示，留意括号、空格以及花括号的位置。

* case 语句必须相对 switch 进行一次缩进，而 break 语句以及 case 内的其它语句都 必须 相对 case 进行一次缩进。

* 如果存在非空的 case 直穿语句，主体里必须有类似 // no break 的注释。

```php
<?php
switch ($expr) {
    case 0:
        echo 'First case, with a break';
        break;
    case 1:
        echo 'Second case, which falls through';
        // no break
    case 2:
    case 3:
    case 4:
        echo 'Third case, return instead of break';
        return;
    default:
        echo 'Default case';
        break;
}
```

####5.3. while 和 do while

* 一个规范的 while 语句应该如下所示，注意其 括号、空格以及花括号的位置。

```php
<?php
while ($expr) {
    // structure body
}
```

* 标准的 do while 语句如下所示，同样的，注意其 括号、空格以及花括号的位置。

```php
<?php
do {
    // structure body;
} while ($expr);
```

####5.4. for

* 标准的 for 语句如下所示，注意其 括号、空格以及花括号的位置。

```php
<?php
for ($i = 0; $i < 10; $i++) {
    // for body
}
```

####5.5. foreach

* 标准的 foreach 语句如下所示，注意其 括号、空格以及花括号的位置。

```php
<?php
foreach ($iterable as $key => $value) {
    // foreach body
}
```
####5.6. try, catch

* 标准的 try catch 语句如下所示，注意其 括号、空格以及花括号的位置。

```php
<?php
try {
    // try body
} catch (FirstExceptionType $e) {
    // catch body
} catch (OtherExceptionType $e) {
    // catch body
}
```

###6. 闭包

* 闭包声明时，关键词 function 后以及关键词 use 的前后都必须要有一个空格。

* 开始花括号必须写在声明的同一行，结束花括号必须紧跟主体结束的下一行。

* 参数列表和变量列表的左括号后以及右括号前，必须不能有空格。

* 参数和变量列表中，逗号前必须不能有空格，而逗号后必须要有空格。

* 闭包中有默认值的参数必须放到列表的后面。

* 标准的闭包声明语句如下所示，注意其 括号、逗号、空格以及花括号的位置。

```php
<?php
$closureWithArgs = function ($arg1, $arg2) {
    // body
};

$closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
    // body
};
```

* 参数列表以及变量列表可以分成多行，这样，包括第一个在内的每个参数或变量都必须单独成行，而列表的右括号与闭包的开始花括号必须放在同一行。

* 以下几个例子，包含了参数和变量列表被分成多行的多情况。

```php
<?php
$longArgs_noVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) {
   // body
};

$noArgs_longVars = function () use (
    $longVar1,
    $longerVar2,
    $muchLongerVar3
) {
   // body
};

$longArgs_longVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) use (
    $longVar1,
    $longerVar2,
    $muchLongerVar3
) {
   // body
};

$longArgs_shortVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) use ($var1) {
   // body
};

$shortArgs_longVars = function ($arg) use (
    $longVar1,
    $longerVar2,
    $muchLongerVar3
) {
   // body
};
```

* 注意，闭包被直接用作函数或方法调用的参数时，以上规则仍然适用。

```php
<?php
$foo->bar(
    $arg1,
    function ($arg2) use ($var1) {
        // body
    },
    $arg3
);
```