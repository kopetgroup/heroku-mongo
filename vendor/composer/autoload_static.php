<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite251eed17582d727b1f0ac2ad1f64831
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
    );

    public static $classMap = array (
        'MongoDB\\BulkWriteResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/BulkWriteResult.php',
        'MongoDB\\Client' => __DIR__ . '/..' . '/mongodb/mongodb/src/Client.php',
        'MongoDB\\Collection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Collection.php',
        'MongoDB\\Database' => __DIR__ . '/..' . '/mongodb/mongodb/src/Database.php',
        'MongoDB\\DeleteResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/DeleteResult.php',
        'MongoDB\\Exception\\BadMethodCallException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/BadMethodCallException.php',
        'MongoDB\\Exception\\Exception' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/Exception.php',
        'MongoDB\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/InvalidArgumentException.php',
        'MongoDB\\Exception\\RuntimeException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/RuntimeException.php',
        'MongoDB\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/UnexpectedValueException.php',
        'MongoDB\\Exception\\UnsupportedException' => __DIR__ . '/..' . '/mongodb/mongodb/src/Exception/UnsupportedException.php',
        'MongoDB\\GridFS\\Bucket' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Bucket.php',
        'MongoDB\\GridFS\\CollectionWrapper' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/CollectionWrapper.php',
        'MongoDB\\GridFS\\Exception\\CorruptFileException' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Exception/CorruptFileException.php',
        'MongoDB\\GridFS\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/Exception/FileNotFoundException.php',
        'MongoDB\\GridFS\\ReadableStream' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/ReadableStream.php',
        'MongoDB\\GridFS\\StreamWrapper' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/StreamWrapper.php',
        'MongoDB\\GridFS\\WritableStream' => __DIR__ . '/..' . '/mongodb/mongodb/src/GridFS/WritableStream.php',
        'MongoDB\\InsertManyResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/InsertManyResult.php',
        'MongoDB\\InsertOneResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/InsertOneResult.php',
        'MongoDB\\Model\\BSONArray' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/BSONArray.php',
        'MongoDB\\Model\\BSONDocument' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/BSONDocument.php',
        'MongoDB\\Model\\CollectionInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfo.php',
        'MongoDB\\Model\\CollectionInfoCommandIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfoCommandIterator.php',
        'MongoDB\\Model\\CollectionInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfoIterator.php',
        'MongoDB\\Model\\CollectionInfoLegacyIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/CollectionInfoLegacyIterator.php',
        'MongoDB\\Model\\DatabaseInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfo.php',
        'MongoDB\\Model\\DatabaseInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfoIterator.php',
        'MongoDB\\Model\\DatabaseInfoLegacyIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/DatabaseInfoLegacyIterator.php',
        'MongoDB\\Model\\IndexInfo' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfo.php',
        'MongoDB\\Model\\IndexInfoIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfoIterator.php',
        'MongoDB\\Model\\IndexInfoIteratorIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInfoIteratorIterator.php',
        'MongoDB\\Model\\IndexInput' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/IndexInput.php',
        'MongoDB\\Model\\TypeMapArrayIterator' => __DIR__ . '/..' . '/mongodb/mongodb/src/Model/TypeMapArrayIterator.php',
        'MongoDB\\Operation\\Aggregate' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Aggregate.php',
        'MongoDB\\Operation\\BulkWrite' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/BulkWrite.php',
        'MongoDB\\Operation\\Count' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Count.php',
        'MongoDB\\Operation\\CreateCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/CreateCollection.php',
        'MongoDB\\Operation\\CreateIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/CreateIndexes.php',
        'MongoDB\\Operation\\DatabaseCommand' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DatabaseCommand.php',
        'MongoDB\\Operation\\Delete' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Delete.php',
        'MongoDB\\Operation\\DeleteMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DeleteMany.php',
        'MongoDB\\Operation\\DeleteOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DeleteOne.php',
        'MongoDB\\Operation\\Distinct' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Distinct.php',
        'MongoDB\\Operation\\DropCollection' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropCollection.php',
        'MongoDB\\Operation\\DropDatabase' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropDatabase.php',
        'MongoDB\\Operation\\DropIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/DropIndexes.php',
        'MongoDB\\Operation\\Executable' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Executable.php',
        'MongoDB\\Operation\\Find' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Find.php',
        'MongoDB\\Operation\\FindAndModify' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindAndModify.php',
        'MongoDB\\Operation\\FindOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOne.php',
        'MongoDB\\Operation\\FindOneAndDelete' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndDelete.php',
        'MongoDB\\Operation\\FindOneAndReplace' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndReplace.php',
        'MongoDB\\Operation\\FindOneAndUpdate' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/FindOneAndUpdate.php',
        'MongoDB\\Operation\\InsertMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/InsertMany.php',
        'MongoDB\\Operation\\InsertOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/InsertOne.php',
        'MongoDB\\Operation\\ListCollections' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListCollections.php',
        'MongoDB\\Operation\\ListDatabases' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListDatabases.php',
        'MongoDB\\Operation\\ListIndexes' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ListIndexes.php',
        'MongoDB\\Operation\\ReplaceOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/ReplaceOne.php',
        'MongoDB\\Operation\\Update' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/Update.php',
        'MongoDB\\Operation\\UpdateMany' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/UpdateMany.php',
        'MongoDB\\Operation\\UpdateOne' => __DIR__ . '/..' . '/mongodb/mongodb/src/Operation/UpdateOne.php',
        'MongoDB\\UpdateResult' => __DIR__ . '/..' . '/mongodb/mongodb/src/UpdateResult.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite251eed17582d727b1f0ac2ad1f64831::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite251eed17582d727b1f0ac2ad1f64831::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite251eed17582d727b1f0ac2ad1f64831::$classMap;

        }, null, ClassLoader::class);
    }
}
